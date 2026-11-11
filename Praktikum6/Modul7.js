const form = document.getElementById("myForm");
const nama = document.getElementById("nama");
const email = document.getElementById("email");
const umur = document.getElementById("umur");
const errNama = document.getElementById("errNama");
const errEmail = document.getElementById("errEmail");
const errUmur = document.getElementById("errUmur");

function cekNama() {
  if (nama.value === "") {
    errNama.textContent = "Nama tidak boleh kosong";
    return false;
  }
  errNama.textContent = "";
  return true;
}

function cekEmail() {
  let pola = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (email.value === "") {
    errEmail.textContent = "Email tidak boleh kosong";
    return false;
  }
  if (!email.value.match(pola)) {
    errEmail.textContent = "Format email tidak valid";
    return false;
  }
  errEmail.textContent = "";
  return true;
}

function cekUmur() {
  if (umur.value === "") {
    errUmur.textContent = "Umur tidak boleh kosong";
    return false;
  }
  if (isNaN(umur.value) || umur.value < 1 || umur.value > 100) {
    errUmur.textContent = "Umur harus berupa angka antara 1 sampai 100";
    return false;
  }
  errUmur.textContent = "";
  return true;
}

nama.addEventListener("blur", cekNama);
email.addEventListener("blur", cekEmail);
umur.addEventListener("blur", cekUmur);

form.addEventListener("submit", function (e) {
  e.preventDefault();
  let validNama = cekNama();
  let validEmail = cekEmail();
  let validUmur = cekUmur();

  if (validNama && validEmail && validUmur) {
    alert("Form berhasil disubmit!");
    form.reset();
  }
});