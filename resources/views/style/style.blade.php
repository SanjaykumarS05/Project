<style>
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: #1f2937;
}
.container {
    background: #111827;
    border-radius: 16px;
    padding: 40px 35px;
    width: 380px;
    box-shadow: 8px 8px 20px #0f172a, -8px -8px 20px #1e293b;
    color: #e5e7eb;
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 26px;
    font-weight: 700;
    color: #f9fafb;
}

/* Input field with floating labels */
.input-group {
    position: relative;
    margin: 22px 0;
}

.input-group input, 
.input-group select {
    width: 100%;
    padding: 14px 12px;
    font-size: 15px;
    border: none;
    outline: none;
    border-radius: 10px;
    background: #1f2937;
    color: #f9fafb;
    box-shadow: inset 4px 4px 10px #0f172a, inset -4px -4px 10px #1e293b;
    transition: all 0.3s ease;
}

.input-group input:focus,
.input-group select:focus,
.input-group input:not(:placeholder-shown),{
    box-shadow: inset 2px 2px 6px #0f172a, inset -2px -2px 6px #1e293b;
}

/* Floating label */
.input-group label, .input-group select, {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    color: #9ca3af;
    font-size: 14px;
    pointer-events: none;
    transition: 0.3s;
}

.input-group input:focus + label,
.input-group input:not(:placeholder-shown) + label,
.input-group select:focus + label,
.input-group select:valid + label ,
.input-group select:not([value=""]) + label {
    top: -8px;
    left: 10px;
    font-size: 12px;
    color: #3b82f6;
    background: #111827;
    padding: 0 4px;
    border-radius: 4px;
}

/* Button */
.submit {
    width: 100%;
    padding: 14px;
    margin-top: 10px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(135deg, #3b82f6, #06b6d4);
    color: #fff;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    letter-spacing: 0.5px;
}

.submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(59,130,246,0.4);
}

.submit:active {
    transform: scale(0.97);
}

/* Register link */
.p1 {
    margin-top: 20px;
    font-size: 14px;
    text-align: center;
    color: #9ca3af;
}

.p1 a {
    color: #06b6d4;
    font-weight: 600;
    text-decoration: none;
}

.p1 a:hover {
    text-decoration: underline;
}

/* Responsive */
@media (max-width: 420px) {
    .container {
        width: 90%;
        padding: 30px 20px;
    }
}
i{
    position: relative;
    top:5px;
   
}

</style>