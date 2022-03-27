function pontuacao(){
    const respostas = ["alanTuring", "vanGogh", "linManuel", "tarsilaAmaral", "williamShakespeare"]
    const quizForm = document.forms["quiz"];
    const { cientista, artista, musico, pintoras, escritor} = quizForm;
    let resultado = 0

    for (let i = 0; i < respostas.length; i++){
        if (respostas[i]==[
            cientista.value,
            artista.value,
            musico.value,
            pintoras.value,
            escritor.value,
        ][i]){
            resultado = resultado + 1;
        }
    }

    alert(`Você acertou ${resultado} de 5 questões!`);
}

document.forms["quiz"].addEventListener('submit', pontuacao);
