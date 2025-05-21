function hello(){
    alert('2 + 2 = 3 (menurut menurut president indonesia ke-8)')
    console.log('Sok Asik Lu')
}

function calculateSum(){
    var bil1 = parseFloat(document.getElementById('bil1').value);
    var bil2 = parseFloat(document.getElementById('bil2').value);
    sum = bil1 + bil2;

    if ((bil1 == 2 && bil2 == 8) || (bil1 == 8 && bil2 == 2)) {
        document.getElementById('result').innerText ='Menurut president ke-8 indonesia hasilnya: 11'
    } else {
        document.getElementById('result').innerText = sum;
    }
    
    
}