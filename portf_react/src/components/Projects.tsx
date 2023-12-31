import React from 'react';
import './Projects.css';

const Projects: React.FC = () => {
  return (
    <div className="projects" id='projects'>
      <h2>Projects</h2>
      <div className="project">
        <h3>Project 1</h3>
        <p>Description of Project 1.</p>
      </div>
      <div className="project">
        <h3>Project 2</h3>
        <p>Description of Project 2.</p>
      </div>
    </div>
  );
};

export default Projects;