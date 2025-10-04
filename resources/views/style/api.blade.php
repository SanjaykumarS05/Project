<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }   
body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    color: #333;
}

h1 {
    text-align: center;
    color: #444;
}
.h2 {
    text-align: center;
    color:white;
    background: #4CAF50;
}

/* ---------- Table Styling ---------- */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 15px;
    background: #fff;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
    border-radius: 6px;
    overflow: hidden;
}

/* Table Header */
.th {
    background: #4CAF50;
    color: #fff;
    text-align: left;
    padding: 12px;
    font-weight: bold;
}

/* Table Data */
.td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

/* Hover Effect */
tr:hover {
    background: #f9f9f9;
}

/* ---------- Buttons & Links ---------- */
.a, button {
    display: inline-block;
    padding: 6px 12px;
    margin: 2px;
    text-decoration: none;
    color: #fff;
    background: #2196F3;
    border-radius: 4px;
    font-size: 14px;
    border: none;
    cursor: pointer;
    transition: background 0.3s ease;
}

/* Hover */
.a:hover, button:hover {
    background: #0b7dda;
}

/* Delete Button */
 table form button.a {
    background: #e53935;
    position: relative;
    left: -21px;
    padding: 8px 10px;
}
table form button.a:hover {
    background: #c62828;
}

/* ---------- Form Styling ---------- */
form {
    max-width: 500px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
    border-radius: 6px;
}

/* Form Groups */
form div {
    margin-bottom: 15px;
}

/* Labels */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 6px;
}

/* Inputs */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    transition: border 0.3s ease;
}

/* Input Focus */
input:focus {
    border-color: #4CAF50;
    outline: none;
}

/* Submit Button */
form button[type="submit"] {
    background: #4CAF50;
    font-weight: bold;
}
form button[type="submit"]:hover {
    background: #45a049;
}

</style>