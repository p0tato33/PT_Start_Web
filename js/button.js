var count = 0;
document.getElementById("myButton").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        var img = document.createElement("img");
        img.src = "https://avatars.mds.yandex.net/i?id=c71f35dfc26e46757c2fe2e052dc950fb17844a4-5100713-images-thumbs&n=13"
        document.getElementById("demo").appendChild(img);
    }
}