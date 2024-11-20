function Login() {
    var loginInput = document.getElementById("login");
    var passwordInput = document.getElementById("haslo");

    var loginValue = loginInput.value;
    var passwordValue = passwordInput.value;

    console.log(loginValue);
    console.log(passwordValue);

    var isValid = true;


    if (loginValue !== "Login") {
        loginInput.classList.add("input-red");
        isValid = false;
    } else {
        loginInput.classList.remove("input-red");
    }

    if (passwordValue !== "Haslo123!") {
        passwordInput.classList.add("input-red");
        isValid = false;
    } else {
        passwordInput.classList.remove("input-red");
    }

    return isValid;
}

function Logout() {
    fetch('logout.php')
        .then(response => {
            window.location.href = 'login.php';
        })
        .catch(error => {
            console.error('Błąd podczas wylogowywania:', error);
        });
}

function Validate(){
    var validName = ValidateName();
    var validSurname = ValidateSurname();
    var validStreet = ValidateStreet();
    var validFlatnumber =  ValidateFlatNumber();
    var validHousenumber = ValidateHouseNumber();
    var validPhoneNumber = ValidatePhoneNumber();
    var validDate = ValidateDate();
    var validPassword = ValidatePassword();
    var validCity = ValidateCity();
    var validCounrty = ValidateCountry();

    if(validName && validSurname && validStreet && validFlatnumber && validHousenumber && validPhoneNumber && validDate && validPassword && validCity && validCounrty){
        console.log("wszystko git ")
        return true;
    }
    else{
        return false;
    }
}

function ValidateName() {
    var inputValue = document.getElementById("imie").value;
    var input = document.getElementById("imie");
    var pattern = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-name");
    var errorParagraph = document.getElementById("error-imie");

    if (wynik) {
        console.log("Imię jest poprawne.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Imię powinno zaczynać się wielką literą, a reszta liter powinna być mała.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-imie";
            errorParagraph.textContent = "Imię powinno zaczynać się wielką literą, a reszta liter powinna być mała.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}


function ValidateSurname() {
    var inputValue = document.getElementById("nazwisko").value;
    var input = document.getElementById("nazwisko");
    var pattern = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+(-[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+)?$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-surname");
    var errorParagraph = document.getElementById("error-nazwisko");

    if (wynik) {
        console.log("Nazwisko jest poprawne.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Nazwisko powinno zaczynać się wielką literą i zawierać tylko litery (i ewentualnie kreskę).");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-nazwisko";
            errorParagraph.textContent = "Nazwisko powinno zaczynać się wielką literą i zawierać tylko litery (i ewentualnie kreskę).";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}

function ValidateStreet() {
    var inputValue = document.getElementById("ulica").value;
    var input = document.getElementById("ulica");
    // Wzorzec: pozwala na nazwy ulic z wyrazami zaczynającymi się wielką literą, liczbami oraz spacjami
    var pattern = /^([A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*|\d+)( ([A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*|\d+))*$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-street");
    var errorParagraph = document.getElementById("error-ulica");

    if (wynik) {
        console.log("Ulica jest poprawna.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Każde słowo nazwy ulicy powinno zaczynać się wielką literą, chyba że jest liczbą.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-ulica";
            errorParagraph.textContent = "Każde słowo nazwy ulicy powinno zaczynać się wielką literą, chyba że jest liczbą.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}




function ValidateHouseNumber() {
    var inputValue = document.getElementById("nrDomu").value;
    var input = document.getElementById("nrDomu");
    
    // Wzorzec: liczby od 1 do n, opcjonalnie zakończone jedną literą (np. 12b, 11C, 161)
    var pattern = /^[0-9]+[a-zA-Z]?$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-house-number");
    var errorParagraph = document.getElementById("error-nrDomu");

    if (wynik) {
        console.log("Numer domu jest poprawny.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Numer domu jest niepoprawny.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-nrDomu";
            errorParagraph.textContent = "Numer domu jest niepoprawny. Powinien składać się z cyfr i opcjonalnie jednej litery na końcu.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}


function ValidateFlatNumber() {
    var inputValue = document.getElementById("nrMieszkania").value;
    var input = document.getElementById("nrMieszkania");

    if(inputValue == "" || inputValue == null){
        return true;
    }

    var pattern = /^[0-9]+$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-flat-number");
    var errorParagraph = document.getElementById("error-nrMieszkania");

    if (wynik) {
        console.log("Numer mieszkania jest poprawny.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Numer mieszkania jest niepoprawny.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-nrMieszkania";
            errorParagraph.textContent = "Numer mieszkania jest niepoprawny.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}


function ValidatePhoneNumber() {
    var inputValue = document.getElementById("nrTelefonu").value;
    var input = document.getElementById("nrTelefonu");
    var pattern = /^[0-9]{9}$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-phone-number");
    var errorParagraph = document.getElementById("error-nrTelefonu");

    if (wynik) {
        console.log("Numer telefonu jest poprawny.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Numer telefonu powinien składać się z 9 cyfr.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-nrTelefonu";
            errorParagraph.textContent = "Numer telefonu powinien składać się z 9 cyfr.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}

function ValidateDate() {
    var inputValue = document.getElementById("dataUrodzenia").value;
    var input = document.getElementById("dataUrodzenia");
    var pattern = /^[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-date");
    var errorParagraph = document.getElementById("error-dataUrodzenia");

    if (wynik) {
        console.log("Data jest poprawna.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Data jest niepoprawna.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-dataUrodzenia";
            errorParagraph.textContent = "Data jest niepoprawna.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}





function ValidatePassword() {
    var inputValue = document.getElementById("haslo").value;
    var input = document.getElementById("haslo");
    var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-password");
    var errorParagraph = document.getElementById("error-haslo");

    if (wynik) {
        console.log("Hasło jest poprawne.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Hasło powinno zawierać wielką literę, małą literę, cyfrę oraz znak specjalny.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-haslo";
            errorParagraph.textContent = "Hasło powinno zawierać wielką literę, małą literę, cyfrę, znak specjalny oraz mieć co najmniej 9 znaków.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}

function ValidateCity() {
    var inputValue = document.getElementById("Miasto").value;
    var input = document.getElementById("Miasto");
    var pattern = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*( [A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*)*$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-city");
    var errorParagraph = document.getElementById("error-Miasto");

    if (wynik) {
        console.log("Miasto jest poprawne.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Każde słowo nazwy miasta powinno zaczynać się wielką literą.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-Miasto";
            errorParagraph.textContent = "Każde słowo nazwy miasta powinno zaczynać się wielką literą.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}

function ValidateCountry() {
    var inputValue = document.getElementById("Panstwo").value;
    var input = document.getElementById("Panstwo");
    var pattern = /^[A-Z][a-z]+( [A-Z][a-z]+)?$/;
    var wynik = pattern.test(inputValue);
    var container = document.getElementById("form-country");
    var errorParagraph = document.getElementById("error-Panstwo");

    if (wynik) {
        console.log("Państwo jest poprawne.");
        input.classList.remove("input-red");
        if (errorParagraph) {
            container.removeChild(errorParagraph);
        }
        return true;
    } else {
        console.log("Każde słowo nazwy państwa powinno zaczynać się wielką literą, a reszta liter powinna być mała.");
        if (!errorParagraph) {
            errorParagraph = document.createElement("p");
            errorParagraph.id = "error-Panstwo";
            errorParagraph.textContent = "Każde słowo nazwy państwa powinno zaczynać się wielką literą, a reszta liter powinna być mała.";
            container.appendChild(errorParagraph);
        }
        input.classList.add("input-red");
        return false;
    }
}