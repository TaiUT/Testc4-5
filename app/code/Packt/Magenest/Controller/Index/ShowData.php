<?php
namespace Packt\Magenest\Controller\Index;
class ShowData extends
    \Magento\Framework\App\Action\Action {

    public function execute()
    {
        $showdata = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $showdata->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $sql="select A.name as aname, B.name as bname , C.name as cname
              from  packt_magenest_magenestmovie as A,
                    packt_magenest_magenestdirector as B,
                    packt_magenest_magenestactor as C,
                    packt_magenest_magenestmovieactor as D 
              where A.director_id=B.director_id and D.movie_id= A.movie_id
                    and D.actor_id=C.actor_id 
               group by A.name , B.name, C.name ";

        $result = $connection->fetchAll($sql);

        echo "<table  border='1px solid black'; width='1000'; hight='150'>";
        echo "<tr>";
            echo "<th> Movie </th>";
            echo "<th> Director </th>";
            echo "<th> Actor </th>";
        echo "</tr>";
        $cou = count($result);
        $i =0;
         while(($result[$i] != null) and ($i < $cou-1) ){
            echo '<tr>';
            echo '<td border: 1px solid black;>'.$result[$i]['aname'].'</td>';
            echo '<td >'.$result[$i]['bname'].'</td>';
            echo '<td >'.$result[$i]['cname'].'</td>';
            echo '</tr>';
            while(($result[$i]['aname']== $result[$i+1]['aname']) and ($i < $cou-1))
             {
                 echo '<tr>';
                 echo '<td>'."".'</td>';
                 echo '<td>'."".'</td>';
                 echo '<td>'.$result[$i+1]['cname'].'</td>';
                 echo '</tr>';
                 $i= $i+1;

             }
        $i= $i+1;
    }
    echo "</table>";


   }


}