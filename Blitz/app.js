// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: "AIzaSyAiQ2s2TQmwi9iy2xYVWgg5IaxLcOVk2MA",
    authDomain: "soporte-2ba38.firebaseapp.com",
    projectId: "soporte-2ba38"
  });
  
  var db = firebase.firestore();

  function guardar(){
      var nombre = document.getElementById('name').value;
      var correo = document.getElementById('email').value;
      var problema = document.getElementById('problem').value;
    db.collection("todos").add({
        name: nombre,
        email: correo,
        problem: problema
    })
    .then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('problem').value = '';
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });    
  }

  //Leer Documentos
  var tabla = document.getElementById('tabla');
  db.collection("todos").onSnapshot((querySnapshot) => {
      tabla.innerHTML = '';
      querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data().name}`);
        tabla.innerHTML += `
        <tr>
        <td>${doc.data().name}</td>
        <td>${doc.data().email}</td>
        <td>${doc.data().problem}</td>
        <td><button class="btn btn-danger" onClick="eliminar('${doc.id}')">Eliminar</button></td>
        </tr>
        `
    });
});

//Borrar Documentos
function eliminar(id){
    db.collection("todos").doc(id).delete().then(function() {
        console.log("Document successfully deleted!");
    }).catch(function(error) {
        console.error("Error removing document: ", error);
    });
}

