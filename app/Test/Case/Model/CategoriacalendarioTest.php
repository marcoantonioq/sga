<?php
App::uses('Categoriacalendario', 'Model');

/**
 * Categoriacalendario Test Case
 *
 */
class CategoriacalendarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categoriacalendario',
		'app.calendario',
		'app.fazenda',
		'app.account',
		'app.medicamento',
		'app.fabricante',
		'app.almoxarifado',
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
		'app.produto',
		'app.cliente',
		'app.clientes_fazenda',
		'app.centralcustos_venda',
		'app.bovino',
		'app.pasto',
		'app.retiro',
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
		'app.atalho',
		'app.categoriasevento',
		'app.groups_categoriasevento',
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
		$this->Categoriacalendario = ClassRegistry::init('Categoriacalendario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categoriacalendario);

		parent::tearDown();
	}

}
