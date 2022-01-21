<?php

spl_autoload_register(function($class_name) {
    include_once str_replace("\\", "/", $class_name) . ".php";
}); 

class Runner 
{
    public static function init() 
    {
        try {
            $conf = new Conf("file.xml");
            print "user: " . $conf->get('user') . "\n";
            print "host: " . $conf->get('host') . "\n";
            $conf->set("pass", "newpass");
            $conf->write();
        
        } catch (FileException $e) {
            echo "FileException: " . $e->getMessage();
        } catch (XmlException $e) {
            echo $e->getMessage();
        } catch (ConfException $e) {
            echo "ConfException: " . $e->getMessage();
        } catch (\Exception $e) {
            echo "Exception: " . $e->getMessage();
        }
    }
}

