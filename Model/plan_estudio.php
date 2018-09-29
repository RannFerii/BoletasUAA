<?php
class plan_estudio
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
	public $planEstudioId;
    public $añoPlanEstudios;
    public $fechaCreacion;

	//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	//Este método selecciona todas las tuplas de la tabla
	//proveedor en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM plan_estudios");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del proveedor a partir del nit
	//utilizando SQL.
	public function Obtener($planEstudioId)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM plan_estudios WHERE planEstudioId = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($planEstudioId));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla proveedor dado un nit.
	public function Eliminar($planEstudioId)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM plan_estudios WHERE planEstudioId = ?");

			$stm->execute(array($planEstudioId));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el nit del proveedor.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE plan_estudios SET
						añoPlanEstudios    = ?,
						fechaCreacion      = ?
				    WHERE planEstudioId = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->añoPlanEstudios,
                        $data->fechaCreacion,
                        $data->planEstudioId
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo proveedor a la tabla.
	public function Registrar(plan_estudio $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO plan_estudios (añoPlanEstudios,fechaCreacion)
		        VALUES (?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                     $data->añoPlanEstudios,
                    $data->fechaCreacion
                )
			);
		} catch (Exception $e)
		{
			return die($e->getMessage());
		}
	}
}
