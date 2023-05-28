let voix = document.querySelectorAll('#data tr');

let total = 0;

for(let value of voix)
{
    total += parseInt(value.lastElementChild.innerHTML);
}

let pourcen = document.querySelectorAll('#data2 tr');

var i = 0;

for(let value of pourcen)
{
    let voice = voix[i].lastElementChild
    value.lastElementChild.innerHTML = Math.floor(parseInt(voice.innerHTML) / total * 100) + "%";
    i++;
}