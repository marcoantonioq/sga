<?php
App::uses('BovinosEvento', 'Model');

/**
 * BovinosEvento Test Case
 *
 */
class BovinosEventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bovinos_evento',
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
		'app.ic',
		'app.semem',
		'app.evento',
		'app.categoriasevento',
		'app.groups_categoriasevento',
		'app.doenca',
		'app.eventos_doenca',
		'app.leitepesagen',
		'app.ordenha',
		'app.movbovino',
		'app.pesagen',
		'app.raca',
		'app.bovinos_raca',
		'app.medicamento',
		'app.medicamentos_bovino'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BovinosEvento = ClassRegistry::init('BovinosEvento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BovinosEvento);

		parent::tearDown();
	}

}
