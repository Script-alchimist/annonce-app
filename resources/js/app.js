import "./bootstrap";
const navbar = document.getElementById("navbar");
const sticky = navbar.offsetTop;

function stickyNavbar() {
    if (window.pageYOffset > sticky) {
        //alert(sticky)
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}

window.onscroll = function () {
    stickyNavbar();
};

// Script pour le dropdown
function toggleAnswer(id) {
    const answerDiv = document.getElementById(id);
    const buttonSvg =
        answerDiv.previousElementSibling.querySelector("button svg");

    answerDiv.classList.toggle("hidden");

    // Script qui Change l'icône du bouton
    const isHidden = answerDiv.classList.contains("hidden");
    buttonSvg.innerHTML = isHidden
        ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>' // Plus signe
        : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>'; // Moins signe
}


function handleCredentialResponse(response) {
    // Cette fonction sera appelée après l'authentification Google
    const idToken = response.credential;
    console.log("ID Token Google:", idToken);

    // Envoyer ce token à votre backend pour vérification et création/connexion de l'utilisateur
    fetch("/api/auth/google", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({ token: idToken }),
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          window.location.href = "/dashboard"; // Rediriger l'utilisateur après succès
        } else {
          alert("Erreur d'inscription/connexion avec Google: " + data.message);
        }
      })
      .catch(error => {
        console.error("Erreur réseau ou serveur:", error);
        alert("Une erreur inattendue est survenue lors de l'inscription/connexion.");
      });
}