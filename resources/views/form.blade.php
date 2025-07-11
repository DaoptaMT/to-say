<!-- resources/views/form.blade.php -->
<form method="POST" action="/generate-word">
    @csrf
    <input type="text" name="url" style="width: 500px;" value="https://www.maudon.vn/mau-don/mau-van-ban-cam-ket-bao-hanh-bao-duong-su-dung-trang-thiet-bi-y-te-3982/" />
    <button type="submit">Tải file Word</button>



    const express = require('express');
    const app = express();

    app.get('/', (req, res) => {
        res.send('Hello, Express!');
    });

    app.listen(3000, () => {
        console.log('Server is running on port 3000');
    });


    const http = require('http');

    const server = http.createServer((req, res) => {
        res.writeHead(200, { 'Content-Type': 'text/plain' });
        res.end('Hello, Node.js!');
    });

    server.listen(3000, () => {
        console.log('Server running at http://localhost:3000/');
    });


    const fs = require('fs');

    fs.readFile('example.txt', 'utf8', (err, data) => {
        if (err) {
            console.error(err);
            return;
        }
        console.log(data);
    });







</form>


node -v
# output: v20.17.0
(Phiên bản có thể thay đổi.)



# khởi tạo một dự án node.js
npm init -y

# Cài đặt gói npm
npm install express


