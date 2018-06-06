<?php

final class PhabricatorRepositoryIdentityPHIDType
  extends PhabricatorPHIDType {

  const TYPECONST = 'RIDT';

  public function getTypeName() {
    return pht('Repository Identity');
  }

  public function newObject() {
    return new PhabricatorRepositoryIdentity();
  }

  public function getPHIDTypeApplicationClass() {
    return 'PhabricatorDiffusionApplication';
  }

  protected function buildQueryForObjects(
    PhabricatorObjectQuery $query,
    array $phids) {

    return id(new PhabricatorRepositoryIdentityQuery())
      ->withPHIDs($phids);
  }

  public function loadHandles(
    PhabricatorHandleQuery $query,
    array $handles,
    array $objects) {}

}
