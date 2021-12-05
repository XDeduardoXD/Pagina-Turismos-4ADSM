// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-app.js";
import { getFirestore, doc, getDoc, onSnapshot, setDoc } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-firestore.js";

const firebaseConfig = {
apiKey: "AIzaSyBZORniwkBNb-GOtHOKIh2qZwAzCf60s4s",
authDomain: "turismotarea-ce9a9.firebaseapp.com",
projectId: "turismotarea-ce9a9",
storageBucket: "turismotarea-ce9a9.appspot.com",
messagingSenderId: "1006867750839",
appId: "1:1006867750839:web:3f02972f843f830ff29232"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);


// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: "AIzaSyBZORniwkBNb-GOtHOKIh2qZwAzCf60s4s",
    authDomain: "turismotarea-ce9a9.firebaseapp.com",
    projectId: "turismotarea-ce9a9"
  });
//iniciar variable db
  var db = firebase.firestore();

//listar datos

db.collection("hoteles").onSnapshot((querySnapshot) => {
    listahoteles.innerHTML = '';
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data().descripcion}`);
        listahoteles.innerHTML += `
        <tr>
            <th scope="row">${doc.data().nombrehotel1}</th>
            <td>${doc.data().precio1}</td>
            <td>${doc.data().telefono1}</td>
            <td>${doc.data().direccion1}</td>
            <td>${doc.data().paginaweb1}</td>
            </tr>
        </tr>`;
    });
});


