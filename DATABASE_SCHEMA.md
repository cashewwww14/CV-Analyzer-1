# Database Schema - CV Analyzer

## Entity Relationship Diagram (ERD)

### Tables Overview:

1. **users** - User accounts (Admin & User)
2. **departments** - Master data departemen
3. **skills** - Master data skills
4. **job_descriptions** - Job descriptions yang dibuat admin
5. **job_description_skills** - Pivot table (Many-to-Many: Job ↔ Skills)
6. **cv_analyses** - Hasil analisis CV user
7. **cv_job_matches** - Matching score antara CV dan Job

---

## Database Relationships:

```
┌─────────────────┐
│     users       │
│─────────────────│
│ id (PK)         │
│ name            │
│ email           │
│ password        │
│ role            │◄─────────────────┐
└─────────────────┘                  │
         │                           │
         │ 1:N                       │ 1:N
         ▼                           │
┌─────────────────┐         ┌───────┴──────────┐
│  cv_analyses    │         │ job_descriptions │
│─────────────────│         │──────────────────│
│ id (PK)         │         │ id (PK)          │
│ user_id (FK)    │         │ job_title        │
│ cv_filename     │         │ department_id(FK)│
│ cv_file_path    │         │ department       │
│ extracted_text  │         │ description      │
│ parsed_data     │         │ requirements     │
│ ai_summary      │         │ responsibilities │
│ career_recomm.. │         │ experience_level │
│ status          │         │ education_level  │
└─────────────────┘         │ status           │
         │                  │ created_by (FK)  │
         │                  └──────────────────┘
         │ 1:N                       │
         │                           │ N:M (via job_description_skills)
         │                           ▼
         │              ┌─────────────────────────┐
         │              │         skills          │
         │              │─────────────────────────│
         │              │ id (PK)                 │
         │              │ name                    │
         │              │ category                │
         │              │ description             │
         │              │ is_active               │
         │              └─────────────────────────┘
         │                           ▲
         │                           │
         │              ┌────────────┴───────────────┐
         │              │ job_description_skills     │
         │              │────────────────────────────│
         │              │ id (PK)                    │
         │              │ job_description_id (FK)    │
         │              │ skill_id (FK)              │
         │              │ proficiency_level          │
         │              │ is_required                │
         │              └────────────────────────────┘
         │
         │ 1:N
         ▼
┌──────────────────────┐
│   cv_job_matches     │
│──────────────────────│
│ id (PK)              │
│ cv_analysis_id (FK)  │─────┐
│ job_description_id(FK)│     │ N:1
│ match_score          │     │
│ matching_skills      │     │
│ missing_skills       │     │
│ match_analysis       │     │
│ recommendations      │     │
└──────────────────────┘     │
                             │
         ┌───────────────────┘
         │
         │ N:1
         ▼
┌─────────────────┐
│  departments    │
│─────────────────│
│ id (PK)         │
│ name            │
│ description     │
│ is_active       │
└─────────────────┘
```

---

## Table Relationships Details:

### 1. **users → cv_analyses** (1:N)
- Satu user bisa punya banyak CV analyses
- FK: `cv_analyses.user_id` → `users.id`

### 2. **users → job_descriptions** (1:N)
- Satu admin bisa create banyak job descriptions
- FK: `job_descriptions.created_by` → `users.id`

### 3. **departments → job_descriptions** (1:N)
- Satu department bisa punya banyak job positions
- FK: `job_descriptions.department_id` → `departments.id`

### 4. **job_descriptions ↔ skills** (N:M)
- Many-to-Many via `job_description_skills`
- Satu job bisa require banyak skills
- Satu skill bisa digunakan di banyak jobs
- Pivot table menyimpan: `proficiency_level`, `is_required`

### 5. **cv_analyses → cv_job_matches** (1:N)
- Satu CV analysis bisa di-match dengan banyak jobs
- FK: `cv_job_matches.cv_analysis_id` → `cv_analyses.id`

### 6. **job_descriptions → cv_job_matches** (1:N)
- Satu job bisa di-match dengan banyak CVs
- FK: `cv_job_matches.job_description_id` → `job_descriptions.id`

---

## Indexes for Performance:

### cv_analyses:
- `user_id` (FK index)
- `status` (filter)
- `created_at` (sorting)

### cv_job_matches:
- `cv_analysis_id` (FK index)
- `job_description_id` (FK index)
- `match_score` (sorting/filtering)
- UNIQUE(`cv_analysis_id`, `job_description_id`) - prevent duplicates

### job_descriptions:
- `department_id` (FK index)
- `status` (filter)
- `created_by` (FK index)

### job_description_skills:
- `job_description_id` (FK index)
- `skill_id` (FK index)
- UNIQUE(`job_description_id`, `skill_id`) - prevent duplicates

### skills:
- `name` (lookup)
- `category` (filter)

### departments:
- `name` (lookup)

---

## Benefits of This Structure:

✅ **Normalization**: No redundant data
✅ **Scalability**: Easy to add more skills/departments
✅ **Performance**: Proper indexing for fast queries
✅ **Flexibility**: Many-to-many relationships support complex scenarios
✅ **Data Integrity**: Foreign keys ensure consistency
✅ **Analytics Ready**: Can easily query match statistics

---

## Example Queries:

### Get all jobs with their required skills:
```php
JobDescription::with(['skills', 'departmentRelation'])->get();
```

### Get CV analysis with all job matches:
```php
CvAnalysis::with(['jobMatches.jobDescription'])->find($id);
```

### Get top matched jobs for a CV:
```php
$cv = CvAnalysis::find($id);
$cv->jobMatches()
   ->with('jobDescription')
   ->orderBy('match_score', 'desc')
   ->limit(10)
   ->get();
```

### Get all CVs that match a specific job:
```php
$job = JobDescription::find($id);
$job->cvMatches()
    ->with('cvAnalysis.user')
    ->orderBy('match_score', 'desc')
    ->get();
```
