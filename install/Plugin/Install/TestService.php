<?php


namespace Plugin\Install;


class TestService
{
    public static function setupTestDatabase($database, $tablePrefix)
    {
        Model::createDatabaseStructure($database, $tablePrefix);
        Model::importData($tablePrefix);
        OptionHelper::import(__DIR__ . '/options.json');
        Model::insertAdmin('test', 'test@example.com', 'test');
        Model::setSiteEmail('test@example.com');
        Model::setSiteName('TestSite');
    }
} 
