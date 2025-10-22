import React, { useState } from 'react'
import { useNavigate } from 'react-router-dom'
import AnimWrapper from '../components/AnimWrapper'

export default function Analyzer(){
  const [file, setFile] = useState(null)
  const [jobReq, setJobReq] = useState('')
  const navigate = useNavigate()

  const submit = async (e) => {
    e.preventDefault()
    if(!file || !jobReq) return alert('Please provide both CV PDF and job requirements')

    const form = new FormData()
    form.append('cv_file', file)
    form.append('job_requirements', jobReq)

    const res = await fetch('/analyze-cv', { method: 'POST', body: form })
    if(res.ok){
      // after server renders result, redirect to results page
      window.location.href = '/analyze-cv'
    } else {
      const text = await res.text()
      alert('Analysis failed: ' + text)
    }
  }

  return (
    <AnimWrapper>
      <h1 className="text-2xl font-bold mb-4">Analyze CV</h1>
      <form onSubmit={submit}>
        <div className="mb-4">
          <label className="block mb-2">CV (PDF)</label>
          <input type="file" accept="application/pdf" onChange={e => setFile(e.target.files[0])} />
        </div>
        <div className="mb-4">
          <label className="block mb-2">Job Requirements</label>
          <textarea className="w-full p-2 border" rows={8} value={jobReq} onChange={e => setJobReq(e.target.value)} />
        </div>
        <button className="bg-blue-600 text-white px-4 py-2 rounded">Analyze</button>
      </form>
    </AnimWrapper>
  )
}
