<?php
App::uses('Pagamento', 'Model');

/**
 * Pagamento Test Case
 *
 */
class PagamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pagamento',
		'app.centralcusto',
		'app.custo',
		'app.fornecimento',
		'app.retiro',
		'app.fazenda',
		'app.account',
		'app.calendario',
		'app.categoriacalendario',
		'app.group',
		'app.user',
		'app.sexo',
		'app.pessoa',
		'app.fazendas_pessoa',
		'app.cargo',
		'app.pessoas_cargo',
		'app.atalho',
		'app.evento',
		'app.categoriasevento',
		'app.ic',
		'app.bovino',
		'app.pasto',
		'app.movbovino',
		'app.pesagen',
		'app.categoriab',
		'app.sexobovino',
		'app.pelagen',
		'app.garrote',
		'app.leitepesagen',
		'app.ordenha',
		'app.raca',
		'app.bovinos_raca',
		'app.medicamento',
		'app.fabricante',
		'app.patrimonio',
		'app.categoriap',
		'app.compra',
		'app.fornecedore',
		'app.fazendas_fornecedore',
		'app.centralcustos_compra',
		'app.venda',
		'app.produto',
		'app.cliente',
		'app.clientes_fazenda',
		'app.centralcustos_venda',
		'app.medicamentos_bovino',
		'app.bovinos_evento',
		'app.semem',
		'app.doenca',
		'app.eventos_doenca',
		'app.alert',
		'app.alerts_group',
		'app.alerts_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pagamento = ClassRegistry::init('Pagamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pagamento);

		parent::tearDown();
	}

}
