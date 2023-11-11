// // let getInput = document.getElementsByClassName("cell");
// let playerX = [];
// let playerO = [];
// let board = [];
// let turn = 1;
// let win = false;
// let winner = "";

// const boardArray = Array(9, null);

// function gameplay(index){
//     if(board[index] != undefined) return;
//     else{
//         if(turn == 1){
//             playerX.push(index);
//             document.getElementById(index).textContent == "X";
//             board.push(index);
//             console.log(board[index]);
//             --turn;
//         }else{
//             playerO.push(index);
//             document.getElementById(index).textContent == "O";
//             board.push(index);
//             ++turn;
//         }
//         winCond();
//     }
// }

// function winCond(){
//     for(var i=0; i<9; i+=3){
//         if(playerX.includes(i) && playerX.includes(i+1) && playerX.includes(i+2)){
//             win = true;
//             winner = "X";
//         }
//         if(playerO.includes(i) && playerO.includes(i+1) && playerO.includes(i+2)){
//             win = true;
//             winner = "O";
//         }    
//     }

//     for(var i=0; i<3; ++i){
//         if(playerX.includes(i) && playerX.includes(i+3) && playerX.includes(i+6)){
//             win = true;
//             winner = "X";
//         }
//         if(playerO.includes(i) && playerO.includes(i+3) && playerO.includes(i+6)){
//             win = true;
//             winner = "O";
//         }    
//     }

//     if(playerX.includes(0) && playerX.includes(4) && playerX.includes(8)){
//         win = true;
//         winner = "X";
//     }

//     if(playerO.includes(0) && playerO.includes(4) && playerO.includes(8)){
//         win = true;
//         winner = "O";
//     }

//     if(playerX.includes(2) && playerX.includes(4) && playerX.includes(6)){
//         win = true;
//         winner = "X";
//     }

//     if(playerO.includes(2) && playerO.includes(4) && playerO.includes(6)){
//         win = true;
//         winner = "O";
//     }

//     if(win) alert("Player Win");
//     /* [0, 1, 2], [3, 4, 5], [6, 7, 8]
//      * [0, 3, 6], [1, 4, 7], [2, 5, 8]
//      * [0, 4, 8], [2, 4, 6]
//      */
// }

// function reset(){
//     playerX = [];
//     playerO = [];
//     turn = 1;
//     win = false;
//     winner = "";
//     const cells = document.getElementsByClassName("cell");
//     for(var i=0; i<cells.length; ++i) cells[i].innerHTML = "";
// }

let playerX = [];
let playerO = [];
let turn = 1;
let win = false;
let winner = "";

function gameplay(index){
    const cell = document.getElementById(index);

    if(cell.textContent === "" || cell.textContent === null) {
        if(turn === 1) {
            cell.textContent = "X";
            playerX.push(index);
            turn = -1;
        }else{
            cell.textContent = "O";
            playerO.push(index);
            turn = 1;
        }
        winCond();
    }
}

function winCond(){
    const winPath = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8],
        [0, 3, 6], [1, 4, 7], [2, 5, 8],
        [0, 4, 8], [2, 4, 6]
    ];
    
    // cek tiap kondisi di patern
    for(const path of winPath){
        if(playerX.includes(path[0]) && playerX.includes(path[1]) && playerX.includes(path[2])){
            win = true;
            winner = "X";
            console.log(winner); //cek
        }
        if(playerO.includes(path[0]) && playerO.includes(path[1]) && playerO.includes(path[2])){
            win = true;
            winner = "O";
            console.log(winner); //cek
        }
    }
    if(win){
        alert("Player " + winner + " Wins!");
        reset();
    }
}

function reset(){
    playerX = [];
    playerO = [];
    turn = 1;
    win = false;
    winner = "";
    const cells = document.getElementsByClassName("cell");
    for (const cell of cells) cell.textContent = ""; //set semua cell isinya kosong
}

function toggleDarkMode(){
    document.body.classList.toggle("darkMode");
}