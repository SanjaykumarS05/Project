<style>
    /* =========================
   FORM STYLING
========================= */
form {
    background: #ffffff;
    padding: 25px 30px;
    margin-bottom: 35px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease-in-out;
}

form:hover {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
}

form div {
    margin-bottom: 18px;
}

form label {
    display: block;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 6px;
    color: #333;
}

form input[type="text"],
form input[type="file"] {
    width: 100%;
    max-width: 400px;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 14px;
    transition: all 0.3s;
}

form input[type="text"]:focus,
form input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}

form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 15px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

form button:hover {
    background-color: #0056b3;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
}

/* =========================
   TABLE STYLING
========================= */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: #fff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    border-radius: 12px;
    overflow: hidden;
    border: 3px solid #6f6c6c;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

table th,
table td {
    padding: 14px 16px;
    text-align: left;
    border-bottom: 1px solid #e0e0e0;
    vertical-align: middle;
    font-size: 14px;
}

table th {
    background-color: #007bff;
    color: #fff;
    font-weight: 600;
    text-align: center;
}
table td {
    height: 220px;
}

table tr:hover {
    background-color: #f9f9f9;
    transition: 0.3s;
}

/* =========================
   MEMORY IMAGE STYLING
========================= */
.memory-images-container {
    display: flex;
    flex-wrap: nowrap;      /* Keep in a single row */
    overflow-x: auto;       /* Scroll if too many images */
    gap: 15px;               /* Space between images */
    padding: 5px 0;
}

.memory-images-container::-webkit-scrollbar {
    height: 6px;
}

.memory-images-container::-webkit-scrollbar-thumb {
    background-color: rgba(0,0,0,0.2);
    border-radius: 3px;
}

.memory-images-container::-webkit-scrollbar-track {
    background: rgba(0,0,0,0.05);
}

.memory-image img {
    width: 90px;
    height: 120px;
    object-fit: cover;
    border-radius: 6px;
    border: 1px solid #ddd;
    transition: transform 0.2s, box-shadow 0.2s;
}

.memory-image img:hover {
    transform: scale(1.25);
    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
}

/* =========================
   BUTTON STYLING
========================= */
td button {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 8px 43px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    margin-top: 10px;
}

.hidden-link {
    display: none;
}

@media (max-width: 768px) {
    table td img {
        width: 60px;
        height: 60px;
    }

    form input[type="text"],
    form input[type="file"] {
        font-size: 13px;
    }

    form button {
        padding: 8px 16px;
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    table th, table td {
        padding: 10px 8px;
        font-size: 13px;
    }

    table td img {
        width: 50px;
        height: 50px;
    }

    form {
        padding: 15px 20px;
    }
}
.delete{

    display: inline-block;
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 8px 65px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    margin-top: 10px;
}
.zip-download-btn{
    display: inline-block;
    background-color: #28a745f;
    color: #fff;
    border: none;
    padding: 8px 27px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    margin-top: 10px;

}
.delete:hover{
    background-color: #c82333;
    transform: translateY(-1px);
    box-shadow: 0 3px 8px rgba(0,0,0,0.12);
}
</style>