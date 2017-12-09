//package tabledb;

import javax.swing.JOptionPane;
import javax.swing.JTable;
import javax.swing.ListSelectionModel;
import javax.swing.event.ListSelectionEvent;
import javax.swing.event.ListSelectionListener;

/**
 *
 * @author cyberduck
 */
public class TableSensor implements ListSelectionListener{
    JTable table;
    public TableSensor(JTable t){
        table=t;
    }
    public void valueChanged(ListSelectionEvent e) {
        //System.out.println(e);
        //ListSelectionModel sm = table.getSelectionModel();
        //sm.setValueIsAdjusting(false);
        if(e.getValueIsAdjusting()){
            int row=table.getSelectedRow();
            int column=table.getSelectedColumn();
            String msg=(String)table.getValueAt(row, column);
            System.out.println("You selected : "+msg);
            //JOptionPane.showMessageDialog(null,msg);
        }
    }
    
}
