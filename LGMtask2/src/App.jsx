import React from 'react';

import {useState} from 'react'; 
import Container from './Container';
import Navbar from './Navbar';
import Home1 from './Home1';
import "./App.css";





function App() {
 
const [clicked, setClick] = useState(false);

  const setClicked = (props) => {
    setClick(props);
  };

 

  return (
      <>
      
    

    <div className="app">
      <Navbar clickedInNav={setClicked} />

      {!clicked && <Home1/>}
      <Container click={clicked}/>

      
    </div>
  
    
    </>);
}
                        export default App;