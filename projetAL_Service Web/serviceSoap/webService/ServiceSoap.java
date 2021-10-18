package webService;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.DriverManager;
import java.util.ArrayList;
import metier.Personne;




public class ServiceSoap {
	private Connection con=null;
	private PreparedStatement statement=null;
	private ResultSet result=null;
	
	
	public void serviceSoap() {
		try
		{
			Class.forName("com.mysql.jdbc.driver");
			con = DriverManager.getConnection("jdbc:mysql://localhost:3306/arch","root","");

		}
		catch(Exception e) {
			System.out.println(e.getMessage());
		}
	}
	

	//lister les utilisateurs 
	
	public ArrayList <Personne> listerEditeurs()
	{ 
		
		ArrayList<Personne> liste = new ArrayList<Personne>();
		try {
			statement = con.prepareStatement("select * from personne");
			result = statement.executeQuery();
			while(result.next()) 
			{
				Personne p = new Personne(null, null, false);
				p.setNom(result.getString("nom"));
				p.setPrenom(result.getString("prenom"));
				p.setLogin(result.getString("login"));
				p.setMdp(result.getString("mdp"));
				p.setAdmin(result.getBoolean("admin"));
				
				liste.add(p);
			}
		}
		catch(Exception e)
		{
			System.out.println(e.getMessage());
		}
		return liste;
	
	}
	
	//ajouter user
	public void ajouterUser(Personne p) {
		try
		{
			statement = con.prepareStatement("insert into personne (nom, prenom, login, mdp, admin) values(?,?,?,?,?)");
			
			statement.setString(1,p.getNom());
			statement.setString(2,p.getPrenom());
			statement.setString(3,p.getLogin());
			statement.setString(4,p.getMdp());
			statement.setBoolean(5,p.isAdmin());
			
			statement.executeUpdate();
		}
		catch(Exception e)
		{
			System.out.println(e.getMessage());
		}
	}
	
	
	//supression 
	public void modifUser(Personne p) {
		try {
			statement = con.prepareStatement("update personne set nom=?, prenom=?, mdp=? where login=?");
			statement.setString(1,p.getNom());
			statement.setString(2,p.getPrenom());
			statement.setString(3,p.getMdp());
			statement.setString(4,p.getLogin());
			
			statement.executeUpdate();
		}
		catch(Exception e) {
			System.out.println(e.getMessage());
		}
	}
	
	
	//suppression
	public void suppUser(Personne p) {
		try {
			statement = con.prepareStatement("delete from personne where login =?");
			statement.setString(1,p.getLogin());
			
			statement.executeUpdate();
		}
		catch(Exception e)
		{
			System.out.println(e.getMessage());
		}
	}
	
	//nommer administrateur
	public void nommerAdmin(Personne p, boolean admin) {
		try {
			statement = con.prepareStatement("update personne set admin=? where login = ?");
			statement.setBoolean(1,admin);
			statement.setString(2,p.getLogin());
			
			statement.executeUpdate();
		}
		catch(Exception e) {
			System.out.println(e.getMessage());
		}
	}
	

	
}
