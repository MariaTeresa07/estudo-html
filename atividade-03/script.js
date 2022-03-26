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
            resultado = resultado + 2;
        }
    }

    alert('Seus pontos: ${resultado}');
}

document.forms["quiz"].addEventListener('submit', resultado());