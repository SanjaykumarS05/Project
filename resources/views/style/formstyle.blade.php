<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        position: relative;
        bottom: 50px;
    }
    table thead {
        background: #007bff;
        color: #fff;
    }
    table th, table td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #8e7272ff;
        border-right: 1px solid #8e7272ff;
        border-left: 1px solid #8e7272ff;
    }
    .button1 {
        display: inline-block;
        padding: 6px 12px;
        margin: 2px;
        font-size: 15px;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: 0.3s ease;
        margin-right: 5px;
    }
    .button1 {
        background: #28a745;
        color: #fff;
    }
    .button1:hover {
        background: #218838;
    }

    .button2 {
        display: inline-block;
        padding: 6px 12px;
        margin: 2px;
        font-size: 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s ease;
        color: #fff;
        background: #dc3545;
    }
    .button2:hover {
        background: #c82333;
    }
    p[style*="color: green;"] {
        background: #d4edda;
        padding: 10px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        color: #155724 !important;
        font-weight: bold;
    }
.new {
        background: #1c9839ff;
        color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        display: inline-block;
        margin-top: 15px;
        position: relative;
        bottom: 45px;
        left: 550px;
    }
    .new:hover {
        background: #0c6204ff;
    }
    input,
     {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        transition: border-color 0.3s;
    }

    form {
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        max-width: 500px;
        margin: 20px auto;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        
    }

    label {
        margin: 10px 0 5px;
        font-weight: bold;
        color: #333;
        text-align: left;
        font-size: 17px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    textarea,
    select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        margin-bottom: 15px;
        transition: border 0.3s;
    }

    input:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 4px rgba(0,123,255,0.3);
    }

    .button3 {
        padding: 10px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
        margin-top: 10px;
    }

    .button3:hover {
        background: #0056b3;
    }
    #big{
        scale: 1.3;
        position: relative;
        top: 5px;
    }
    span{
        color: red;
        font-size: 20px;
    }
    #message{
        height: 100px;
        resize: vertical;
    }
    .form-label{
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 5px;
    }
    .form-control{
        width: 70%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        margin-bottom: 15px;
        transition: border 0.3s;
    }
    .form-control{
        width:100%;
    }
</style>
