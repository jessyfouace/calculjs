let goodResponse = 0
let timer = 0
let tableResponse = []

function startExercice() {
    let buttonStart = document.getElementById("buttonstart");

    buttonStart.classList.remove("d-flex")
    buttonStart.classList.add("d-none")

    showExercice()
}

function showExercice() {
    let showCount = document.getElementById("showCount");
    let showExercice = document.getElementById("showExercice");
    let timer = 4;

    let interval = setInterval(function () {
        if (timer >= 2) {
            timer--;
            showCount.textContent = timer;
        } else {
            clearInterval(interval)
            exerciceStart()
            showCount.classList.add("d-none")
            showExercice.classList.remove("d-none")
            showExercice.classList.add("d-flex")
        }
    }, 1000)
}

function exerciceStart() {

    window.intervaltimer = setInterval(startTimer, 10)

    let difficulty = window.location.href
    let difficultyTable = difficulty.split("/")

    let maxNum = 9999
    let minNum = 1

    for (let index = 0; index < difficultyTable.length; index++) {
        if (difficultyTable[index] == 'facile') {
            maxNum = 100
        } else if (difficultyTable[index] == 'moyen') {
            maxNum = 1000
        } else if (difficultyTable[index] == 'difficile') {
            maxNum == 9999
        }
    }

    let topNumber = document.getElementById("topNumber")
    let topNumber2 = document.getElementById("topNumber2")
    let botNumber = document.getElementById("botNumber")
    let botNumber2 = document.getElementById("botNumber2")
    let signe = document.getElementById("signe")
    let signe2 = document.getElementById("signe2")

    let randomTopNumber = Math.floor(Math.random() * maxNum)
    let randomBotNumber = Math.floor(Math.random() * randomTopNumber - 1)

    if (topNumber) {
        topNumber.textContent = randomTopNumber
    } else {
        topNumber2.textContent = randomTopNumber
    }
    if (botNumber) {
        botNumber.textContent = randomBotNumber
    } else {
        botNumber2.textContent = randomBotNumber
    }
    if (signe) {
        signe.textContent = '-'
    } else {
        signe2.textContent = '-'
    }
}

function showResult(timeOut) {
    // if (e.keyCode == 13) {
        let topNumber = document.getElementById("topNumber")
        let topNumber2 = document.getElementById("topNumber2")
        let botNumber = document.getElementById("botNumber")
        let botNumber2 = document.getElementById("botNumber2")

        let resultPlayer = document.getElementById("resultPlayer")
        let resultPlayer2 = document.getElementById("resultPlayer2")



        if (topNumber) {
            topNumberCalcul = topNumber.innerHTML;
        } else {
            topNumberCalcul = topNumber2.innerHTML;
        }
        if (botNumber) {
            botNumberCalcul = botNumber.innerHTML;
        } else {
            botNumberCalcul = botNumber2.innerHTML;
        }

        let result = Number(topNumberCalcul) - Number(botNumberCalcul)

        if (resultPlayer) {
            if (resultPlayer.value == result || timeOut == 'stopexerciceendtimefinish') {
                clearInterval(intervaltimer)
                if (goodResponse <= 10) {
                    goodResponse++;
                    tableResponse.push([goodResponse, topNumberCalcul + ' - ' + botNumberCalcul + ' = ' + result, timer.toFixed(2)])
                    resultPlayer.value = ''
                    timer = 0
                    timeOut = ''
                    if (goodResponse <= 9) {
                        exerciceStart()
                    } else {
                        endExercice()
                    }
                } else {
                    endExercice()
                }
            } else {
            }
        } else {
            if (resultPlayer2.value == result || timeOut == 'stopexerciceendtimefinish') {
                clearInterval(intervaltimer)
                if (goodResponse <= 10) {
                    goodResponse++;
                    tableResponse.push([goodResponse, topNumberCalcul + ' - ' + botNumberCalcul + ' = ' + result, timer.toFixed(2)])
                    resultPlayer2.value = ''
                    timer = 0
                    timeOut = ''
                    if (goodResponse <= 9) {
                        exerciceStart()
                    } else {
                        endExercice()
                    }
                } else {
                    endExercice()
                }
            } else {
            }
        }
    // }
}

function startTimer() {
    timer = Number(timer) + 0.01
    let timingCount = document.getElementById('timingCount')
    timingCount.textContent = 'Temps: ' + (timer.toFixed(2))
    if (timer >= '20') {
        timingCount.textContent = ''
        showResult('stopexerciceendtimefinish')
    }
}

function endExercice() {
    let showExercice = document.getElementById("showExercice");
    let endExercice = document.getElementById("endExercice");
    let bodytable = document.getElementById("bodytable");
    let buttonRestart = document.getElementById("buttonrestart");


    buttonRestart.classList.remove("d-none")
    buttonRestart.classList.add("d-flex")
    showExercice.classList.remove("d-flex")
    showExercice.classList.add("d-none")
    endExercice.classList.remove("d-none")
    endExercice.classList.add("d-flex")

    for (let index = 0; index < tableResponse.length; index++) {
        let tr = document.createElement("tr")

        let th = document.createElement("th")
        th.setAttribute("scope", "row")
        th.textContent = tableResponse[index][0]

        let td = document.createElement("td")
        td.textContent = tableResponse[index][1]

        let td2 = document.createElement("td")
        td2.textContent = tableResponse[index][2] + 's'

        if (Number(tableResponse[index][2]) == 20.00) {
            th.setAttribute('class', 'text-danger font-weight-bold')
            td.setAttribute('class', 'text-danger font-weight-bold')
            td2.setAttribute('class', 'text-danger font-weight-bold')
        } else if (Number(tableResponse[index][2]) < 13) {
            th.setAttribute('class', 'text-success font-weight-bold')
            td.setAttribute('class', 'text-success font-weight-bold')
            td2.setAttribute('class', 'text-success font-weight-bold')
        } else {
            th.setAttribute('class', 'text-warning font-weight-bold')
            td.setAttribute('class', 'text-warning font-weight-bold')
            td2.setAttribute('class', 'text-warning font-weight-bold')
        }

        bodytable.appendChild(tr)
        tr.appendChild(th)
        tr.appendChild(td)
        tr.appendChild(td2)
    }
}