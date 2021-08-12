import "./card.css";


function Card(curElem) {
  

    return (
        <div className="card">
          <div className="imgContainer">
            <img src={curElem.avatar} alt="img.." />
          </div>
          <div className="content">
            <h3>
              {curElem.first_name} {curElem.last_name}{" "}
            </h3>
            <p>{curElem.email} </p>
          </div>
        </div>
      );
    
  
}

export default Card;