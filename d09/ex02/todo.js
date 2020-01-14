let button = document.getElementById("add");
let listElement = document.getElementById("ft_list");
let list = {};

parseCookies();
showList();

function parseCookies() {
    let arr = document.cookie.split('; ').map(x => x.split('='));
    if (arr[0] != "")
        list = Object.fromEntries(arr);
}

function showList() {
    if (Object.keys(list).length != 0) {
        for (const key in list) {
            const element = list[key];
            console.log(element);
            listElement.innerHTML = `<div id="${key}" onclick="deleteNode(${key})">${sanitizeText(unescape(element))}</div>${listElement.innerHTML}`
        }
    }
}

function sanitizeText(text) {
    var temp = document.createElement('div');
    temp.textContent = text;
    return temp.innerHTML;
}

function newNode() {
    let text = prompt();
    if (text.length) {
        if (text.replace(/\s/g, '').length) {
            let date = Date.now();
            listElement.innerHTML = `<div id="${date}" onclick=deleteNode(${date})>${sanitizeText(text)}</div>${listElement.innerHTML}`
            list[date] = text;
            addCookie(date, escape(list[date]));
        }
    }
}

function deleteNode(id) {
    if (confirm("Do you want to delete this TODO?")) {
        delete list[id];
        document.getElementById(id).remove();
        document.cookie = `${id}=; expires=Thu, 01 Jan 1970 00:00:00 UTC;`
    }
}

function addCookie(key, value) {
    document.cookie = `${key}=${value}`
}


