package webService;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;

import metier.Article;






public class ServiceRest1 {
	private Connection con=null;
	private PreparedStatement statement=null;
	private ResultSet result=null;
	
	
	public ServiceRest1(){
		try
	    {
	       Class.forName("com.mysql.jdbc.Driver");
	 	  con=DriverManager.getConnection("jdbc:mysql://localhost:3306/arch","root","");
	    }
	    catch(Exception e)
	    {
	    System.out.println(e.getMessage());
	    }
	}
	
	//recuperer la liste des articles
	public ArrayList <Article> listerArticles()
	{
		 ArrayList<Article> liste= new ArrayList<>();
	     try
	     {
	       statement=con.prepareStatement("select * from articles");
	       result=statement.executeQuery();
	       while(result.next())
	         {
	         Article a = new Article();
	           a.setTitre(result.getString("titre"));
	           a.setContenu(result.getString("texte"));
	           a.setCategorie(result.getString("categorie"));
	           a.setDatePublication(result.getDate("date"));

	           liste.add(a); 
	         }  
	     }
	     catch(Exception e)
	     {
	        System.out.println(e.getMessage());
	     }
	    return liste;

	}
	
	//lister les articles appartenant a une categorie donner par l'utilisateur
	

}
