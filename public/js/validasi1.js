function validate() {
    var nama = document.getElementById('nama').value;
    var nrp = document.getElementById('nrp').value;

    var type = /\d/.test(nama);
    if (nama === "" && nrp === "") {
        Swal.fire({
            title: "Kesalahan Input",
            text: "NRP dan NAMA tidak boleh kosong",
            icon: "error"
        });
        return false;
    } else if (nrp.length < 10) {
        Swal.fire({
            title: "Kesalahan Input",
            text: "NRP harus sejumlah 10 digit",
            icon: "error"
        });
        return false;
    } else if (type == true) {
        Swal.fire({
            title: "Kesalahan Input",
            text: "Nama tidak boleh memuat angka",
            icon: "error"
        });
        return false;
    } else if (nama.length <= 2) {
        Swal.fire({
            title: "Kesalahan Input",
            text: "Nama harus lebih dari 2 huruf",
            icon: "error"
        });
        return false;
    }
}
