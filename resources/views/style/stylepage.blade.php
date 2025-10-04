<style>
* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    }
       html, body {
       overflow-x: hidden;
    }
body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f6f8;
        color: #333;
        align-items: center;
    }
h1 {
        text-align: center;
        font-size: 2.5rem;
        color: #ffffff;
        background-color: #2c3e50;
        padding: 15px 25px;
        width: 100%;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
nav {
        margin-bottom: 10px;
        width: 100%;
    }
nav ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        gap: 20px;
        background-color: #425a71ff;
        padding: 12px 0;
    }

nav ul li a {
        text-decoration: none;
        color: #ecf0f1;
        padding: 10px 16px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

nav ul li a:hover {
        background-color: #2fc1a4ff;
        color: #ffffff;
    }

.logout:hover {
        background-color: #e74c3c;
        color: #ffffff;
    }
.content {   
        position: relative;
        min-height:70vh;              
        min-width: 250px;              
        background-color: #ffffff;
        padding: 20px;
        margin: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        text-align: center;
}
footer {
        position: static;
        bottom: 0;
        background-color: #2c3e50;
        color: #ecf0f1;
        text-align: center;
        padding: 12px;
        width: 100%;
        font-size: 16px;
        box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
    }
.center {
    text-align: center;
    margin: 20px;
    padding: 20px;
    border-radius: 10px;
    background-color: #e3f2fd;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}
.center:hover {
    background-color: #bbdefb;
    color: #0d47a1;
    transform: scale(1.05) translateY(-8px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.2);
}
a {
    text-decoration: none; 
    color: inherit;       
    display: block;        
}
.center h2 {
    margin-bottom: 10px;
    font-size: 22px;
    color: #0d47a1;
    transition: color 0.3s ease;
}

.center p {
    font-size: 16px;
    line-height: 1.5;
    color: #333;
}
.center:hover h2 {
    color: #0a2e75;
}
.left{
    text-align: left;
    margin-left: 30px;
}
ol{
    margin-left: 30px;
    font-size: 18px;
    color: #010101ff;
    font-weight: 600;
    margin-top: 50px;
}
.li{
    display: inline-block;
    display: flex;
    max-width: 250px;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    margin: 10px;
    border-radius: 6px;
    transition: background-color 0.3s ease;
    background-color: #2c51e8ff;
    position:relative;
    left: 533px;
    bottom: 18px;
}
.a{
    position:relative;
    bottom: 10px;
    color: white;
    margin-top: 20px;
    text-decoration: none;
}
.li:hover{
    background-color: #223388ff;
}
.div{
    position: relative;
    left: 50px;
}

</style>
