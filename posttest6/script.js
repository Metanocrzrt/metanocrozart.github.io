alert("aga kareba po");

function check()
{
    let cb = document.getElementById('cb').checked;            if(cb == true)
    {
        document.getElementById('container').classList.remove('contain');
        document.getElementById('container').classList.add('containDark');
        document.getElementById('navi').classList.remove('nav');
        document.getElementById('navi').classList.add('navDark');
    }

    else
    {
        document.getElementById('container').classList.remove('containDark');
        document.getElementById('container').classList.add('contain');
        document.getElementById('navi').classList.remove('navDark');
        document.getElementById('navi').classList.add('nav');
    }
}
document.getElementById("myButton").onclick =function(){
    document.getElementById("aboutme").innerHTML = "Tentang Saya";
    aboutme.style.color = 'lightblue'
    aboutme.style.backgroundcolor = 'lightblue';
}

// document.getElementById("myButton").onclick =function(){
// document.getElementById("basket").innerHTML = "Keranjang";
// basket.style.color = 'lightblue'
// }
const basket = document.getElementById('basket');
basket.innerHTML = '<em>Keranjang</em>';
basket.style.color = 'red'

function translate(){
    document.getElementById("aboutme").innerHTML = "Tentang Saya"
}

document.getElementById('myButton').addEventListener('mouseover', myFunction)
function myFunction(){
    alert('ini listener')
}
