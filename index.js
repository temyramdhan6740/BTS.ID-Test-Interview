var xhr = new XMLHttpRequest();
var url = "http://18.139.50.74:8080/v2/login";

xhr.open("POST", url, true);
xhr.setRequestHeader("Content-Type", "application/json");
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        var json = JSON.parse(xhr.responseText);
        console.log(json.username + ", " + json.password);
    }
};
var data = JSON.stringify({ "username": "hey@mail.com", "password": "101010" });
xhr.send(data);