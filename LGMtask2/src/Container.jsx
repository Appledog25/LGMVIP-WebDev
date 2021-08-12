
import Card from "./Card";
import { useState, useEffect } from "react";
import Loader from "./Loader";
import Axios from 'axios';
import './Container.css';


function Container(props) {
  const [loader, setLoader]  = useState(false);
    const [users, setUsers] = useState(null);
    
    

    const getUsers = () =>{
        
      setLoader(true);
        Axios.get("https://reqres.in/api/users?page=1", {timeout: 1100})
            .then((response) =>{
                setUsers(response.data.data);
                setLoader(false);
                
            })
            
        
            
    }
    

    useEffect(() => {
        props.click &&
         getUsers();
    }, [props.click])

    

  
    return (

    <div className="container">
    
    
    {users && users.map((data) => {
            return(
            <Card key={data.id} first_name={data.first_name} last_name={data.last_name} 
            email={data.email} avatar={data.avatar} />
            )
            })} 
    <Loader load={loader} />

    </div>

  )
}

export default Container;