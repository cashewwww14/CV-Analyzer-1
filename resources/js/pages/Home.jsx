import React from 'react'
import AnimWrapper from '../components/AnimWrapper'
export default function Home(){
  return (
    <AnimWrapper>
      <h1 className="text-2xl font-bold">Welcome to CV Analyzer</h1>
      <p className="mt-2">Use the analyzer to compare your CV with job requirements.</p>
    </AnimWrapper>
  )
}
