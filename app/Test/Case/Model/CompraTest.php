<?php
App::uses('Compra', 'Model');

/**
 * Compra Test Case
 *
 */
class CompraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.compra',
		'app.fornecedore',
		'app.fazenda',
		'app.account',
		'app.patrimonio',
		'app.fabricante',
		'app.almoxarifado',
		'app.categoriap',
		'app.retiro',
		'app.pasto',
		'app.bovino',
		'app.categoriab',
		'app.sexobovino',
		'app.pelagen',
		'app.evento',
		'app.user',
		'app.sexo',
		'app.pessoa',
		'app.fazendas_pessoa',
		'app.cargo',
		'app.pessoas_cargo',
		'app.group',
		'app.atalho',
		'app.categoriasevento',
		'app.groups_categoriasevento',
		'app.ic',
		'app.semem',
		'app.doenca',
		'app.eventos_doenca',
		'app.pesagen',
		'app.leitepesagen',
		'app.ordenha',
		'app.movbovino',
		'app.raca',
		'app.bovinos_raca',
		'app.cliente',
		'app.clientes_fazenda',
		'app.fazendas_fornecedore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Compra = ClassRegistry::init('Compra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Compra);

		parent::tearDown();
	}

}
