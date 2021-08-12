import React from 'react';



function Home1() {


    const logo = "bubble.png";


    return (
        <>
            <div class="hero">

                <div className="contents">

                    <h1 class="t1">Welcome to Xsos.</h1>
                    <small class="s1">Communication is our policy.</small>

                </div>
                <div className="bubbles">
                    <img src={logo} alt="bubbleImage" />
                    <img src={logo} alt="bubbleImage" />
                    <img src={logo} alt="bubbleImage" />
                    <img src={logo} alt="bubbleImage" />
                    <img src={logo} alt="bubbleImage" />
                    <img src={logo} alt="bubbleImage" />
                    <img src={logo} alt="bubbleImage" />
                    <img src={logo} alt="bubbleImage" />
                    <img src={logo} alt="bubbleImage" />
                </div>


            </div>




        </>);
}

export default Home1;