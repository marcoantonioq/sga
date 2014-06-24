<?php
App::uses('Fornecimento', 'Model');

/**
 * Fornecimento Test Case
 *
 */
class FornecimentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fornecimento',
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
		'app.pasto',
		'app.bovino',
		'app.categoriab',
		'app.sexobovino',
		'app.pelagen',
		'app.evento',
		'app.categoriasevento',
		'app.groups_categoriasevento',
		'app.ic',
		'app.semen',
		'app.doenca',
		'app.eventos_doenca',
		'app.pesagen',
		'app.leitepesagen',
		'app.ordenha',
		'app.movbovino',
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
		$this->Fornecimento = ClassRegistry::init('Fornecimento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fornecimento);

		parent::tearDown();
	}

}
