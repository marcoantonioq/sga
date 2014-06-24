<?php
App::uses('Produto', 'Model');

/**
 * Produto Test Case
 *
 */
class ProdutoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.produto',
		'app.fabricante',
		'app.medicamento',
		'app.fazenda',
		'app.account',
		'app.calendario',
		'app.categoriacalendario',
		'app.patrimonio',
		'app.categoriap',
		'app.compra',
		'app.fornecedore',
		'app.fazendas_fornecedore',
		'app.centralcusto',
		'app.centralcustos_compra',
		'app.custo',
		'app.centralcustos_custo',
		'app.venda',
		'app.cliente',
		'app.clientes_fazenda',
		'app.centralcustos_venda',
		'app.retiro',
		'app.pasto',
		'app.bovino',
		'app.categoriab',
		'app.sexobovino',
		'app.pelagen',
		'app.ic',
		'app.semem',
		'app.evento',
		'app.user',
		'app.sexo',
		'app.pessoa',
		'app.fazendas_pessoa',
		'app.cargo',
		'app.pessoas_cargo',
		'app.group',
		'app.categoriasevento',
		'app.groups_categoriasevento',
		'app.atalho',
		'app.bovinos_evento',
		'app.doenca',
		'app.eventos_doenca',
		'app.leitepesagen',
		'app.ordenha',
		'app.movbovino',
		'app.pesagen',
		'app.raca',
		'app.bovinos_raca',
		'app.medicamentos_bovino'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produto = ClassRegistry::init('Produto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produto);

		parent::tearDown();
	}

}
