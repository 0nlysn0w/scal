<?php

namespace Mini\Model;

use Mini\Core\Model;

class Member extends Model
{
	public function getAllMembers()
	{
		$sql = "SELECT `id`, `name`, `sex`, `group` FROM member";
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	public function addMember($name, $sex, $group)
	{
		$sql = "INSERT INTO member (name, sex, `group`) VALUES (:name, :sex, :group)";
		$query = $this->db->prepare($sql);
		$parameters = array(':name' => $name, ':sex' => $sex, ':group' => $group);

		$query->execute($parameters);
	}
}