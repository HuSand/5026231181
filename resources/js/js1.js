function hello(){
    alert('1 + 1 = 11 (menurut prabowo)')
    console.log('Sok Asik Lu')
}

function calculateSum(){
    var bil1 = parseFloat(document.getElementById('bil1').value);
    var bil2 = parseFloat(document.getElementById('bil2').value);
    sum = bil1 + bil2;

    document.getElementById('result').innerText = sum;
    
}