<?php
App::uses('CentralcustosCompra', 'Model');

/**
 * CentralcustosCompra Test Case
 *
 */
class CentralcustosCompraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.centralcustos_compra',
		'app.centralcusto',
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
		'app.leitepesagen',
		'app.ordenha',
		'app.movbovino',
		'app.pesagen',
		'app.raca',
		'app.bovinos_raca',
		'app.medicamento',
		'app.medicamentos_bovino',
		'app.cliente',
		'app.clientes_fazenda',
		'app.fazendas_fornecedore',
		'app.venda',
		'app.produto',
		'app.custo',
		'app.centralcustos_custo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CentralcustosCompra = ClassRegistry::init('CentralcustosCompra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CentralcustosCompra);

		parent::tearDown();
	}

}
