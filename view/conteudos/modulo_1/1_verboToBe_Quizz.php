<script type="text/javascript">


function Question( q, a1, a2, a3, a4, a5 ) {
	this.query = q;
	this.answers = [ a1, a2, a3, a4 ];
	this.correct = a5;
}
var questions = [
	new Question( "Qual a alternativa que responde a seguinte pergunta: How old are you?", "I have sixteen years old", "I'm twenty years old 1", "I have twenty years old", "I have sixteen years old", 1 ),
	new Question( "Qual o plural de 'batata'?","Tomatos","Potatos","Potatoes 1","Tomatoes",2),
	new Question( "Qual a resposta da pergunta: Do you like ice-cream?", "Yes, I don't like", "No, I like", "Yes, I like OU Yes, I do 1", "Yes, I liked ice-cream",2),
	new Question( "Qual a tradução de fish, horse, cow, cat, dog, bird e bear, respectivamente?", "Peixe, vaca, cavalo, gato, cachorro, pássaro e urso", "Peixe, cavalo, pássaro, vaca, gato, cachorro e urso", "Peixe, cavalo, vaca, cachorro, gato, pássaro e urso", "Peixe, cavalo, vaca, gato, cachorro, pássaro e urso 1",3),
	new Question( "Como se diz 33 em inglês?", "Twelve three", "Thirty-three 1", "Twenty three", "Three three",1)
// NO COMMA after last entry
];

function initQuiz() {
// randomly order the questions...
  questions.sort( function() { return Math.random() - 0.5; } );

  var str = '';
  str += "<ol>";
	
// display the randomized questions:
  for ( var qnum = 0; qnum < questions.length; ++qnum ) {
	var q = questions[qnum];
	str += '<li class="question" style="margin-bottom: 35px;">' + q.query 
		 + "<ol><li><label><input type='radio' name='group"+qnum+"' />" 
		 + q.answers.join("</label></li><li><label><input type='radio' name='group"+qnum+"' />") 
		 + "</label></li></ol></li>";
  }
  str += "</ol>";

  str+= '<form name="myForm" onsubmit="validate()"  method="post">';
  str += '<input type="hidden" name="acertos" id="acertos"><input type="submit" value="Enviar Resposta" name="btnSubmit"/>';
  str+= '</form>';
  return str;
}

function getRBtnName(GrpName) {
  var sel = document.getElementsByName(GrpName);
  var fnd = -1;
  var str = '';
  for (var i=0; i<sel.length; i++) {
    if (sel[i].checked == true) { str = sel[i].value;  fnd = i; }
  }
  return fnd;   // return option index of selection
// comment out next line if option index used in line above  
//  return str;
} 

// check answers

function validate() {

  var score = 0;  var tmp = '';
  for (var i=0; i<questions.length; i++) {
	tmp = 'group'+i;
	if (getRBtnName(tmp) == questions[i].correct) { score++; }
  }
  alert('Você acertou : '+score+' de '+questions.length+' questões!'); window.location.href = "index.php";
  <?php
 $_SESSION['QuizzRespondido'] = True;


?>
 var respondido = "<?php print $_SESSION['QuizzRespondido']; ?>";


if (respondido == 1) {
  document.getElementById("mostraConteudo").innerHTML = "";
}

}



</script>

<html lang="en">
<head>
 <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h1> Quizz Modulo 1 </h1>

<p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p>


</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
  $("#mostraConteudo").append(initQuiz());

});
</script>



