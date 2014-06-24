<?php
App::uses('Ordenha', 'Model');

/**
 * Ordenha Test Case
 *
 */
class OrdenhaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ordenha',
		'app.leitepesagen',
		'app.bovino',
		'app.pasto',
		'app.retiro',
		'app.fazenda',
		'app.account',
		'app.patrimonio',
		'app.fabricante',
		'app.almoxarifado',
		'app.categoriap',
		'app.cliente',
		'app.clientes_fazenda',
		'app.fornecedore',
		'app.fazendas_fornecedore',
		'app.pessoa',
		'app.sexo',
		'app.user',
		'app.group',
		'app.atalho',
		'app.fazendas_pessoa',
		'app.cargo',
		'app.pessoas_cargo',
		'app.categoriab',
		'app.sexobovino',
		'app.pelagen',
		'app.evento',
		'app.categoriasevento',
		'app.groups_categoriasevento',
		'app.ic',
		'app.semens',
		'app.doenca',
		'app.eventos_doenca',
		'app.raca',
		'app.bovinos_raca'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ordenha = ClassRegistry::init('Ordenha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ordenha);

		parent::tearDown();
	}

}
