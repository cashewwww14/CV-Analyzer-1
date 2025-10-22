import React from 'react'
import { createRoot } from 'react-dom/client'
import { BrowserRouter, Routes, Route, Link } from 'react-router-dom'
import Home from './pages/Home'
import Login from './pages/Login'
import Register from './pages/Register'
import Analyzer from './pages/Analyzer'
import Results from './pages/Results'
import AdminDashboard from './pages/AdminDashboard'
import UserManager from './pages/UserManager'

function App(){
  return (
    <BrowserRouter>
      <nav className="p-4 bg-gray-800 text-white">
        <div className="container mx-auto flex space-x-4">
          <Link to="/" className="font-bold">CV Analyzer</Link>
          <Link to="/home">Home</Link>
          <Link to="/analyze">Analyze CV</Link>
        </div>
      </nav>
      <div className="container mx-auto p-6">
        <Routes>
          <Route path="/" element={<Home/>} />
          <Route path="/login" element={<Login/>} />
          <Route path="/register" element={<Register/>} />
          <Route path="/home" element={<Home/>} />
          <Route path="/analyze" element={<Analyzer/>} />
          <Route path="/results" element={<Results/>} />
          <Route path="/admin/dashboard" element={<AdminDashboard/>} />
          <Route path="/admin/user-manager" element={<UserManager/>} />
        </Routes>
      </div>
    </BrowserRouter>
  )
}

const root = createRoot(document.getElementById('react-root'))
root.render(<App />)
