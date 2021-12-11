 //darkmode
 if (localStorage.getItem('theme') === 'dark') {
     darkmode(true)
 } else {
     darkmode(false)
 }


 function darkmode(isdark) {
     if (isdark) {
         document.body.setAttribute('class', 'dark')
         localStorage.setItem('theme', 'dark')
     } else {
         document.body.setAttribute('class', '')
         localStorage.removeItem('theme')
     }
 }

 //see password
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

 function seeOnConfirm(isseeconfirm) {
     //ambil element input dengan id=password
     var passConfirm = document.getElementById('ConfirmPassword')

     //  ambil element form
     var form = document.querySelector("form")
     if (isseeconfirm) {
         //jika user mengklik gambar "see" maka type di tag input berubah jadi "text"

         passConfirm.setAttribute('type', 'text')
         form.setAttribute('id', 'see')

     } else {
         //jika user mengklik gambar "hide" maka type di tag input berubah jadi "password"
         passConfirm.setAttribute('type', 'password')
         form.removeAttribute('id')
     }
 }