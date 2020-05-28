<?php	
	use Dompdf\Dompdf;

	require_once("dompdf/autoload.inc.php");

	$dompdf = new DOMPDF();
	$dompdf->loadHtml('
			<h1 style="text-align: center;">Gerador PDF do Mussum</h1>
			<p>Mussum Ipsum, cacilds vidis litro abertis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Mé faiz elementum girarzis, nisi eros vermeio. Atirei o pau no gatis, per gatis num morreus. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.</p>
			<p>Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Interagi no mé, cursus quis, vehicula ac nisi. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi.</p>
			<p>Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Si num tem leite então bota uma pinga aí cumpadi! Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.
            <p>Per aumento de cachacis, eu reclamis. Interagi no mé, cursus quis, vehicula ac nisi. Manduma pindureta quium dia nois paga. Cevadis im ampola pa arma uma pindureta.</p>
            <p>Diuretics paradis num copo é motivis de denguis. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. A ordem dos tratores não altera o pão duris. Aenean aliquam molestie leo, vitae iaculis nisl.</p>
            <p>Suco de cevadiss deixa as pessoas mais interessantis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.</p>
            <p>Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Leite de capivaris, leite de mula manquis sem cabeça. Atirei o pau no gatis, per gatis num morreus.</p>
            <p>Detraxit consequat et quo num tendi nada. Quem manda na minha terra sou euzis! Sapien in monti palavris qui num significa nadis i pareci latim. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!</p>
            <p>Delegadis gente finis, bibendum egestas augue arcu ut est. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Casamentiss faiz malandris se pirulitá. Quem num gosta di mim que vai caçá sua turmis!</p>
            <p>Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Quem num gosta di mé, boa gentis num é.</p>
            <p>Viva Forevis aptent taciti sociosqu ad litora torquent. In elementis mé pra quem é amistosis quis leo. Paisis, filhis, espiritis santis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.</p>
            <p>Mé faiz elementum girarzis, nisi eros vermeio. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Pra lá , depois divoltis porris, paradis. Copo furadis é disculpa de bebadis, arcu quam euismod magna.
		');
    $dompdf->setPaper('A4', 'landscape');
	$dompdf->render();
	$dompdf->stream(
		"cacilds",
		array(
			"Attachment" => true //downloadis ok
		)
	);
