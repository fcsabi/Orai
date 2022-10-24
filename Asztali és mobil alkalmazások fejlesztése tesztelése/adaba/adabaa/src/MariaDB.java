import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class MariaDB implements Database {
    public Connection connectDB()throws SQLException{
            Connection con=null;
            try {
                con=tryConnection();
            } catch (SQLException e) {
                System.err.println("HIba a kapcsolodásban");
            }
            return con;}
    
    
    public Connection tryConnection(){
    Connection con=null;
    String url="jdk.mariadb//localhost:adaba";
    String user="adaba";
    String pass="titok";
    DriverManager.getConnection(url, user, pass);
    
    
    return con;
    }

    public void closeDB(Connection con){

    }
    






}
