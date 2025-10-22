import React from 'react'

export default function AnimWrapper({ children }){
  return (
    <div className="animate-fade-in-up">
      {children}
    </div>
  )
}
