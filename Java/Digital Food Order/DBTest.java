//package dbtest;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Vector;

import javax.swing.table.DefaultTableModel;

public class DBTest
{
		DataAccess da =new DataAccess();
        ResultSet rs =null;
		private String s;
		DefaultTableModel model ;
		InsertionArray arr[] = new InsertionArray[100];
		int arrayCounter = 0 ;
		
		//ADMIN ITEM ADD KORBE................
		private String array[] = new String[5];
		public DBTest(String s11, String s22,String s33,String s44, String s55)
		{
			 array[0] = s11;// item_no
			 array[1] = s22;// item_name
			 array[2] = s33;// type
			 array[3] = s44;// price
			 array[4] = s55;// status
		}
		
		private String array2[] = new String[4];
		
		public DBTest(String s11, String s22,String s33,String s44)
		{
			 array2[0] = s11;// item_no
			 array2[1] = s22;// item_name
			 array2[2] = s33;// quantity
			 array2[3] = s44;// served
			 
		}
		
		public DBTest(DefaultTableModel m)
		{
			model = m ;
		}
		
		public void showTable()
		{
			rs = da.getData("select * from item") ;
			try{
                while(rs.next()){
                    String id=rs.getString("Item_No");
                    String name=rs.getString("Item_Name");
                    String type=rs.getString("Item_Type");
                    String price = rs.getString("Item_Price");
                    String status = rs.getString("Item_Status");
                    Vector row = new Vector();
                    
                    row.add(id);    
                    row.add(name);
                    row.add(type);
                    row.add(price);
                    row.add(status);
               
                    
                    model.addRow(row);
                }
            }
			catch(Exception e)
			{
				System.out.println("DB Error : "+e.getMessage());
			}
		}
		
		
    public void Insert()
    {  
		System.out.println(array[0]);
		System.out.println(array[3]);
		System.out.println(array[4]);
		
        String q2="insert into Item values('"+array[0]+"','"+array[1]+"','"+array[2]+"','"+array[3]+"','"+array[4]+"')";
        int c=da.updateDB(q2);
    }
    
    public String getPrice(String code)
    {
    	rs = da.getData("select * from item") ;
    	
		try{
            while(rs.next()){
                String id=rs.getString("Item_No");
                if(code.equals(id))
                {
                	return rs.getString("Item_Price");
                }
                
            }
        }
		catch(Exception e)
		{
			System.out.println("DB Error : "+e.getMessage());
		}
		return "null" ;
    }
    
    //order code ta jlabel a dakhanor jonno
    
   public String getCode(String code)
    {
    	rs = da.getData("select * from item") ;
    	
		try{
            while(rs.next()){
                String id=rs.getString("Item_No");
                if(code.equals(id))
                {
                	return rs.getString("Item_No");
                }
                
            }
        }
		catch(Exception e)
		{
			System.out.println("DB Error : "+e.getMessage());
		}
		return "null" ;
    	
    	
    }
    
    
    
    //order code jlabel a dakhano ends......
    
    public void cancelOrder(String code)
    {
			for(int i=0; i<arrayCounter; i++)
			{
				if(arr[i].id.equals(code))
				{
					//arr[i] = null ;
					for(int j=i+1; j<=arrayCounter; j++)
					{
						arr[j-1] = arr[j] ;
						arrayCounter--;
						
					}
				}
			}
		
        	System.out.println("cancel");
        
    }
    
    public int getChangedPrice()
    {
    	int prc=0 ;
    	
    	for(int i=0; i<arrayCounter; i++)
    	{
    		prc = prc + ( Integer.valueOf(this.getPrice(arr[i].id))*Integer.valueOf(arr[i].quantity) );
    		System.out.println("the changed price: "+prc);
    	}
    	
    	return prc ;
    }
    
    public String getQuantity(String code)
    {
    	for(int i = 0; i < arrayCounter; i++)
    	{
    		if(arr[i].id.equals(code))
    		{
    			return arr[i].quantity;
    		}
    	}
		return "null ";
    }
    
    public void orderTable(String code, String q)
    {
    	rs = da.getData("select * from item") ;
    	
		try{
            while(rs.next())
            {
                String id=rs.getString("Item_No");
                if(code.equals(id))
                {
                	String name = rs.getString("Item_Name") ;
                	
                	arr[arrayCounter] = new InsertionArray(id, name, q, "NO") ;
                	
                	arrayCounter++ ;
                	
                }
                
            }
        }
		catch(Exception e)
		{
			System.out.println("DB Error : for ok button");
		}
    }
    
    public void orderTableUpdate()
    {
		da=new DataAccess();
    	for(int i=0; i<arrayCounter; i++)
    	{
    		String q2="insert into table1 values('"+arr[i].id+"','"+arr[i].name+"','"+arr[i].quantity+"','"+arr[i].served+"')";
    	    int c=da.updateDB(q2);
    	    System.out.println("inserted to order");
    	}
    	System.out.println("updated");
    }
	
    public void orderTableUpdate2()
    {
		da=new DataAccess();
    	for(int i=0; i<arrayCounter; i++)
    	{
    		String q2="insert into table2 values('"+arr[i].id+"','"+arr[i].name+"','"+arr[i].quantity+"','"+arr[i].served+"')";
    	    int c=da.updateDB(q2);
    	    System.out.println("inserted to order");
    	}
    	System.out.println("updated");
    }
    
	public void Update()
	{
		String q2="update Item set Item_No = '"+array[0]+"', Item_Name = '"+array[1]+"', Item_Type = '"+array[2]+"', Item_Price = '"+array[3]+"', Item_Status = '"+array[4]+"' where Item_No = '"+array[0]+"'";
        int c=da.updateDB(q2);
	}
	
	public void UpdatTable1()
	{
		String q2="update table1 set Item_No = '"+array2[0]+"', Item_Name = '"+array2[1]+"', Quantity = '"+array2[2]+"', Served = '"+array2[3]+"' where Item_No = '"+array2[0]+"'";
        int c=da.updateDB(q2);
	}
	
	public void UpdatTable2()
	{
		String q2="update table2 set Item_No = '"+array2[0]+"', Item_Name = '"+array2[1]+"', Quantity = '"+array2[2]+"', Served = '"+array2[3]+"' where Item_No = '"+array2[0]+"'";
        int c=da.updateDB(q2);
	}
	
	//.....................................Inserting CustomerInfo in DataBase Table...................//
	private String customerInfo[] = new String[3];
	
	public DBTest(String name , String mob, String add)
	{
		customerInfo[1] = name;
		customerInfo[0] = mob;
		customerInfo[2] = add;
	}
	
	public void insertCustomerInfo()
	{
		String query = "insert into customerinfo values('"+customerInfo[0]+"','"+customerInfo[1]+"','"+customerInfo[2]+"')";
		int c = da.updateDB(query);	
	}
	
	//.....................................................................................................//
	
	//.......................Delete Item for cook..................................//
	
	public void cookDelete()
	{
		String item_no = array[0];
		System.out.println(array[0]);
        String q2="DELETE FROM item WHERE Item_No = "+item_no;
        System.out.println(q2);
		int c=da.updateDB(q2);
	}
	
	//********************************************************************//
	//sunzid show order table dakher jonno kaj suru korse.....cook frame ar showorder button
	public void showOrderedTable()
	{
		rs = da.getData("select * from Table1");
		
		try
		{
            while(rs.next()){
            	//String sl = rs.getString("Order No");
                String no =rs.getString("Item_No");
                String name=rs.getString("Item_Name");
                String quan=rs.getString("Quantity");
                String served = rs.getString("Served");
               
                Vector row = new Vector();
                
               // row.add(sl) ;
                row.add(no);    
                row.add(name);
                row.add(quan);
                row.add(served);
          
                //System.out.println(id+name);
                
                model.addRow(row);
            }
        }
		
		catch(Exception e)
		{
			System.out.println("DB Error : "+e.getMessage());
		}
    }
	
	//----------------------------------
	
	
	public void showOrderedTable2()
	{
		rs = da.getData("select * from Table2");
		
		try
		{
            while(rs.next()){
            	//String sl = rs.getString("Order No");
                String no =rs.getString("Item_No");
                String name=rs.getString("Item_Name");
                String quan=rs.getString("Quantity");
                String served = rs.getString("Served");
               
                Vector row = new Vector();
                
               // row.add(sl) ;
                row.add(no);    
                row.add(name);
                row.add(quan);
                row.add(served);
          
                //System.out.println(id+name);
                
                model.addRow(row);
            }
        }
		
		catch(Exception e)
		{
			System.out.println("DB Error : "+e.getMessage());
		}
    }
	
	//----------------------------------
	
	//sunzid show order table dakher jonno kaj SESH korse.....cook frame ar showorder button
	}
//}