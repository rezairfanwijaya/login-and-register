 //darkmode
 //  local storage akan menyimpan data terkahir dari user (memilih dark atau light)
 if (localStorage.getItem('theme') === 'dark') {
     darkmode(true)
 } else {
     darkmode(false)
 }


 function darkmode(isdark) {
     //  jika user memilih dark (menekan gambar bulan di navbar)
     if (isdark) {
         // maka tag body akan memiliki atribut class dengan value 'dark'
         document.body.setAttribute('class', 'dark')
             //  dan local storage akan menyimpan item theme dengan value 'dark'
         localStorage.setItem('theme', 'dark')

         // jika user memilih light (menekan gambar matahari di navbar)
     } else {
         // maka value dari atribut class pada tag body akan di hapus
         document.body.setAttribute('class', '')
             //  begitupulan value dari theme di localstorage akan ikut dihapus
         localStorage.removeItem('theme')
     }
 }

 //see password pada halaman login
 function see(issee) {
     //ambil element input dengan id=password
     var pass = document.getElementById('password')
     if (issee) {
         //jika user mengklik gambar "see" maka type di tag input berubah jadi "text"
         pass.setAttribute('type', 'text')
         document.body.setAttribute('id', 'see')

     } else {
         //jika user mengklik gambar "hide" maka type di tag input berubah jadi "password"
         pass.setAttribute('type', 'password')
         document.body.removeAttribute('id')
     }
 }

 //  see password pada halaman signup
 function seeOnConfirm(isseeconfirm) {
     //ambil element input dengan id=ConfirmPassword
     var passConfirm = document.getElementById('ConfirmPassword')

     //  ambil element form
     var form = document.querySelector("form")
     if (isseeconfirm) {
         //jika user mengklik gambar "see" maka type di tag input berubah jadi "text"
         passConfirm.setAttribute('type', 'text')
             //  dan tag from akan memiliki atribut id dengan value 'see'
         form.setAttribute('id', 'see')

     } else {
         //jika user mengklik gambar "hide" maka type di tag input berubah jadi "password"
         passConfirm.setAttribute('type', 'password')
             //  dan tag value pada atribut pada tag input akan dihapus
         form.removeAttribute('id')
     }
 }